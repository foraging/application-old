const path = require('path');
const webpack = require('webpack');

module.exports = [{
    context: path.join(__dirname, 'resources/js'),
    entry: [
        path.join(__dirname, 'resources/js/application.js'),
        path.join(__dirname, 'resources/sass/application.scss'),
    ],
    output: {
        path: path.join(__dirname, 'public/assets'),
        filename: 'application.js'
    },
    module: {
        rules: [
            {
                test: /application\.scss$/,
                include: [
                    path.join(__dirname, 'resources/sass'),
                ],
                use: [
                    {
                        loader: 'file-loader',
                        options: {
                            name: 'application.css',
                        }
                    }, 'extract-loader', 'css-loader?-url', 'sass-loader'
                ]
            }
        ]
    }
}];
