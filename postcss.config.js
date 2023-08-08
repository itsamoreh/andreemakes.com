const postCssImportExtGlob = require("postcss-import-ext-glob");
const postCssImport = require("postcss-import");
const postcssNested = require("postcss-nested");

module.exports = {
	plugins: [postCssImportExtGlob(), postCssImport(), postcssNested()],
};
