# GitHub Updater Additions
* Contributors: [Andy Fragen](https://github.com/afragen), [contributors](https://github.com/afragen/github-updater-additions/graphs/contributors)
* Tags: plugin, theme, github-updater, extension
* Requires at least: 4.4
* Requires PHP: 5.3
* Tested up to: 4.4
* Stable tag: master
* Donate link: 
* License: GPLv2 or later
* License URI: http://www.gnu.org/licenses/gpl-2.0.html

A plugin that allows for adding installed plugins or themes hosted on GitHub, Bitbucket, or GitLab, that do not contain GitHub Updater headers to GitHub Updater.

## Description

This is a plugin that will add the appropriate data via hooks in GitHub Updater so that repositories that are not correctly configured to use GitHub Updater may be added to GitHub Updater without modifying the repository. This only really works for installed plugins/themes.

A properly configured JSON file must reside in the root directory of this plugin.

## Installation

Adapt the `github-updater-additions.json` file to your needs.

## JSON config file format

This file must be named `github-updater-additions.json`.

```json
[
  {
    "type": "github_plugin",
    "slug": "plugin-noheader/plugin-noheader.php",
    "uri": "https://github.com/afragen/plugin-noheader"
  },
  {
    "type": "bitbucket_theme",
    "slug": "theme-noheader",
    "uri": "https://bitbucket.org/afragen/theme-noheader"
  }
]
```

The `"type"` element is from the following list.

* github_plugin
* github_theme
* bitbucket_plugin
* bitbucket_theme
* gitlab_plugin
* gitlab_theme

The `"slug"` element is either the plugin slug or the theme stylesheet slug.

The `"uri"` element should be self-explanatory.

## Development

PRs are welcome against the `develop` branch.
