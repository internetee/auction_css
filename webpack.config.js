const webpack = require('webpack');
const path = require('path');
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const OptimizeCssAssetsPlugin = require("optimize-css-assets-webpack-plugin");

module.exports = {
  entry: './index.js',
  output: {
    path: path.join(__dirname, 'dist'),
    filename: 'bundle.js'
  },
  resolve: {
    extensions: ['.js', '.jsx'],
    alias: {
      '../../theme.config$': path.join(__dirname, 'semantic/src/theme.config')
    }
  },
  module: {
    rules: [
      // this handles images
      {
        test: /\.jpe?g$|\.gif$|\.ico$|\.png$|\.svg$/,
        exclude: [
          path.resolve(__dirname, './node_modules'),
        ],
        use: {
          loader: 'file-loader',
          options: {
            name: '[name].[ext]',
            outputPath: 'images',
          },
        },
      },
  
      // the following rules handle font extraction
      {
        test: /\.woff(2)?(\?v=[0-9]\.[0-9]\.[0-9])?$/,
        exclude: [
          path.resolve(__dirname, './node_modules'),
        ],
        use: {
          loader: 'url-loader',
          options: {
            name: '[name].[ext]',
            limit: 10000,
            mimetype: 'application/font-woff',
            outputPath: 'fonts',
          },
        },
      },
      {
        test: /\.(ttf|eot)(\?v=[0-9]\.[0-9]\.[0-9])?$/,
        exclude: [
          path.resolve(__dirname, './node_modules'),
        ],
        use: {
          loader: 'file-loader',
          options: {
            name: '[name].[ext]',
            outputPath: 'fonts',
          },
        }
      },
      {
        test: /\.otf(\?.*)?$/,
        exclude: [
          path.resolve(__dirname, './node_modules'),
        ],
        use: {
          loader: 'file-loader',
          options: {
            name: '[name].[ext]',
            mimetype: 'application/font-otf',
            outputPath: 'fonts',
          },
        },
      },
      
      // this handles .less & .scss translation
      {
        use: [
            MiniCssExtractPlugin.loader,
            'css-loader',
            'less-loader',
        ],
        test: /\.less$/
      },
  
      {
        use: [
          MiniCssExtractPlugin.loader,
          {
            loader: 'css-loader',
            options: {
              sourceMap: true,
            },
          },
          {
            loader: 'resolve-url-loader',
            options: {
              root: __dirname
            },
          },
          {
            loader: 'sass-loader',
            options: {
              outputStyle: 'compressed',
              sourceMap: true
            },
          },
        ],
        test: /main.scss$/
      }
    ]
  },
  plugins: [
    new MiniCssExtractPlugin({
      filename: '[name].css'
    }),
    new OptimizeCssAssetsPlugin({
      assetNameRegExp: /main.css$/,
      cssProcessor: require('cssnano'),
      cssProcessorPluginOptions: {
        preset: ['default', { discardComments: { removeAll: true } }],
      },
      canPrint: true
    }),
    new webpack.ProvidePlugin({
      $: 'jquery',
      jQuery: 'jquery'
    })
  ],
};