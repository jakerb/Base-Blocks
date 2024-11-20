const base_path = '../../..';
const block_path = '..';
const theme_config = require(base_path + '/theme.config.json');

module.exports = {
  content: [
    block_path + "/*.{php,js}"
  ],
  theme: theme_config.theme,
  plugins: theme_config.plugins
}