# UC Santa Cruz Communications website Genesis child theme

This is the WordPress theme for the [UC Santa,Cruz Communicatons & Marketing](https://communications.ucsc.edu/), it is a child theme for the [Genesis theme framework](http://my.studiopress.com/themes/genesis/).

## Features

- Modular programming architecture
- Configuration-based architecture
- Modular CSS via Sass
- Task runner using gulp
- Bourbon and Neat

## Dependencies

- [WordPress](https://wordpress.org/download/) (preferably installed in a local environment)
- [Genesis framework](http://my.studiopress.com/themes/genesis/)
- [npm](https://www.npmjs.com/)
- [Node.js](https://nodejs.org/en/)
- [Gulp](https://gulpjs.com/)

## Install and build

Assuming you are working in a local development environment, clone this repository into your `/wp-content/themes/` directory.

### Install Node.js & NPM

#### Linux & Mac

The easiest way to install Node.js and npm on Linux or Mac is via [Linuxbrew](http://linuxbrew.sh/) or [Homebrew](https://brew.sh/), respectively. Installing Linuxbrew or Homebrew will handle downloading, unpacking, compiling and installing Node and NPM on your system in a few minutes.

```console
brew install node
```

#### Windows

There is no "Winbrew" available for Microsoft Windows. To install Node.js and NPM on Windows, download the Windows installer from the [Node.js website](https://nodejs.org/en/) and run the installer. Follow the prompts and accept the default settings.

#### Test it out

```console
node -v
v9.6.1
```

```console
npm -v
5.6.0
```

### Install dependencies (Gulp, Bourbon, Neat, et al)

Now that you've installed NPM, use it to install the node modules in order to run gulp. To do that, navigate into your working `/theme/` directory in your terminal and type:

```console
npm install
```

Wait several minutes for the installation to complete and you're in business!

## Gulp tasks

Coming soon

## Additional Requirements

The **Communications & Marketing** website also requires a custom plugin to run properly.

- [UC Santa Cruz WordPress Core Functionality Plugin](https://github.com/Herm71/ucsc-core-functionality-plugin/tree/master)