var ExtractText = require('extract-text-webpack-plugin');
var BrowserSyncPlugin = require('browser-sync-webpack-plugin');
const autoprefixer = require('autoprefixer');

var config = {
  entry: ['./src/js/main.js', './src/scss/main.scss'],
  output: {
    filename: 'js/[name].js',
    publicPath: '../../dist/'
  },
  module: {

    rules: [
      { // STYLE LOADERS
        test: /\.(css|sass|scss)$/,
        use: ExtractText.extract({
          use: ['css-loader', 'postcss-loader', 'sass-loader'],
        })
      },
      { // SCRIPT LOADERS
        test: /\.js$/,
        exclude: /(node_modules|bower_components)/,
        loader: 'babel-loader',
        query: {
          presets: ['env']
        }
      },
      { // URL LOADER, IMAGE FILES
        test: /\.(jpe?g|png)/,
        loader: 'url-loader?limit=10000&name=img/[name].[ext]', //if < 10 kb, base64 encode img to css
      },
      { // URL LOADER, FONT FILES
        test: /\.(woff|woff2|eot|ttf|svg)/,
        loader: 'url-loader?limit=10000&name=fonts/[name].[ext]', //font files to './dist/fonts/**.'
      },
    ]
  },
  plugins: [
    new ExtractText({
      filename: 'css/[name].css',
      allChunks: true,
    }),
    new BrowserSyncPlugin({
      host: 'localhost',
      port: 3000,
      // @NOTE: make sure this proxy matches the folder name of your wordpress installation
      proxy: 'http://localhost/ronbook',
      files: ['**/*.php'],
      ghostMode: {
        clicks: false,
        forms: false
      }
    })
  ]
};

module.exports = config;
