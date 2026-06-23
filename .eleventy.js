const ui = require("@terrabyte/web-ui");
const { Environment, FileSystemLoader } = require("nunjucks");
const path = require("path");

module.exports = function (eleventyConfig) {

// Register filters + transforms
  ui.registerFilters(eleventyConfig);
  ui.registerTransforms(eleventyConfig);

// Configure Nunjucks
  const loaderPaths = [
    "src/_includes",
    path.resolve(__dirname, "node_modules/@terrabyte/web-ui")
  ];

  const env = new Environment(new FileSystemLoader(loaderPaths), {
    noCache: true
  });

// Inject project-level site data into the UI package
  const siteData = require("./_data/site.json");
  env.addGlobal("site", siteData);
  env.addGlobal("siteData", siteData);
  env.addGlobal("currentYear", new Date().getFullYear());
  env.addGlobal("buildId", Date.now());

// Allow UI package to access the same environment
  if (typeof ui.setNunjucksEnvironment === "function") {
    ui.setNunjucksEnvironment(env);
  }

  eleventyConfig.setLibrary("njk", env);

// Passthroughs
  eleventyConfig.addPassthroughCopy('src/.htaccess');
  eleventyConfig.addPassthroughCopy("src/css");
  eleventyConfig.addPassthroughCopy("src/img");
  eleventyConfig.addPassthroughCopy("src/js");
  eleventyConfig.addPassthroughCopy("src/*.ico");
  eleventyConfig.addPassthroughCopy("src/*.png");

  eleventyConfig.addPassthroughCopy({
    "node_modules/@terrabyte/web-ui/css": "css",
    "node_modules/@terrabyte/web-ui/js": "js",
    "node_modules/@terrabyte/web-ui/img": "img"
  });

// Watch targets
  eleventyConfig.addWatchTarget("src/css");
  eleventyConfig.addWatchTarget("src/js");
  eleventyConfig.addWatchTarget("src/img");
  eleventyConfig.addWatchTarget("node_modules/@terrabyte/web-ui");

// Shortcodes
  eleventyConfig.addShortcode("currentYear", () => `${new Date().getFullYear()}`);

// Directory structure
  return {
    dir: {
      input: "src",
      output: "_site"
    }
  };
};