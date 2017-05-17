# [Hyperdrive](http://hyperdrive.habd.as)

> The fastest way to load pages in WordPress.

![Hyperdrive](https://github.com/comfusion/hyperdrive/blob/master/logo.png "Hyperdrive Plugin for WordPress")

[![Packagist](https://img.shields.io/packagist/v/comfusion/hyperdrive.svg?style=flat-square)](https://packagist.org/packages/comfusion/hyperdrive)
[![Travis](https://img.shields.io/travis/comfusion/hyperdrive.svg?style=flat-square)](https://travis-ci.org/comfusion/hyperdrive)
[![Code Climate](https://img.shields.io/codeclimate/github/comfusion/hyperdrive.svg?style=flat-square)](https://codeclimate.com/github/comfusion/hyperdrive)
[![Test Coverage](https://img.shields.io/codeclimate/coverage/github/comfusion/hyperdrive.svg?style=flat-square)](https://codeclimate.com/github/comfusion/hyperdrive)

Hyperdrive is a zero-configuration WordPress plugin that increases speed using [modern Web standards](https://fetch.spec.whatwg.org/). Based on initial testing Hyperdrive [has been shown](https://hackernoon.com/putting-wordpress-into-hyperdrive-4705450dffc2) to reduce perceived latency in the Twenty Seventeen theme by 200-300%.

## How it works

Hyperdrive uses a performance optimization technique known as [Fetch Injection](https://hackcabin.com/post/managing-async-dependencies-javascript/) available in [supported browsers](http://caniuse.com/#search=fetch). Fetch is the modern replacement for Ajax.

## Requirements

- WordPress >= 4.6
- PHP >= 5.6

## Installation

Two types of installations are possible during the beta period. Choose the one which best meets your development workflow.

### Composer

To automate installation using [Composer](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx) run the following command from your WordPress installation:

    composer require comfusion/hyperdrive:dev-master

The above script will download Hyperdrive and install it automatically to the `/wp-content/plugins` directory of your WordPress installation.

### Manual

If you experience any issues with automatic installation, or would prefer to install the plugin manually, simply:

1. Upload `hyperdrive.php` to the `/wp-content/plugins/` directory,
2. Activate the plugin through the *Plugins* menu in WordPress.

## Todo before 1.0.0 release candidates

- [ ] Only dequeue scripts if [browser supports Fetch](http://caniuse.com/#search=fetch) for backwards compatibility with older browsers
- [ ] Integrate localization behaviors [as shown here](https://gist.github.com/jhabdas/64e8380010e43a526fb9c9ee511fad17#file-functions-php-L507).
- [ ] Test with a few different themes and open bugs and needed

## Contributing

Hundreds of thousands of individuals and users rely on WordPress every day to consume and share information online. For that reason Hyperdrive has strict requirements for code contributions.

Though Hyperdrive may have a high bar for quality, please don't let that deter you from making contribution. We take all comers.

Where possible project owners, collaborators and contributors should embrace the [values of the Agile Manifesto](https://pragdave.me/blog/2014/03/04/time-to-kill-agile.html):

> - **Individuals and Interactions** over Processes and Tools
> - **Working Software** over Comprehensive Documentation
> - **Customer Collaboration** over Contract Negotiation, and
> - **Responding to Change** over Following a Plan

And, most importantly, always proceed with authenticity. :saxophone:

### Issues

Hyperdrive accepts any issue. Be it gratuitously worded, devoid of information or just plain dumb. Feedback is a gift and will be treated as such. No question is stupid, even the stupid ones.

### Pull requests

Please open issues when creating PRs and PR against the issue to close it. This establishes a need (the issue) and helps separate the need from the implementation (the pull), resulting in more robust solutions.

Before working on a pull please install and configure [EditorConfig](http://editorconfig.org/) for your editor or IDE to help normalize your code syntax with that of the project.

## License

[AGPLv3+](http://www.gnu.org/licenses/)
