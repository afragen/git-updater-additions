# Git Updater Additions

* Contributors: afragen
* Tags: plugin, theme, github-updater, extension
* Requires at least: 5.2
* Requires PHP: 7.2
* Tested up to: trunk
* Stable tag: master
* Donate link: https://thefragens.com/git-updater-donate
* License: MIT

A plugin that allows for adding installed plugins or themes hosted on GitHub, Bitbucket, GitLab, or Gitea that do not contain required headers to Git Updater.

## Description

This is a plugin that will add the appropriate data via hooks in Git Updater so that repositories that are not correctly configured to use Git Updater may be added to Git Updater without modifying the repository. This only works for installed plugins/themes.

This plugin adds an **Additions** tab inside the Git Updater Settings for updating settings to this plugin.

## Usage

The `"type"` element is from the following list.

* github_plugin
* github_theme
* bitbucket_plugin
* bitbucket_theme
* gitlab_plugin
* gitlab_theme
* gitea_plugin
* gitea_theme

The `"slug"` element is either the plugin slug or the theme stylesheet slug.

The `"uri"` element should be self-explanatory.

The `"primary_branch"` element if the repository's primary branch is not `master`.

The `"release_asset"` element if the repository has a build process and is distibuted via a release asset.

### Examples

    type: github_plugin
    slug: plugin-noheader/plugin-noheader.php
    uri: https://github.com/afragen/plugin-noheader

or

    type: bitbucket_theme
    slug: theme-noheader
    uri: https://bitbucket.org/afragen/theme-noheader

Above are examples for a plugin or a theme. Please notice the diffence in the `slug`.

## Development

PRs are welcome against the `develop` branch.

## Screenshots
1. GitHub Updater Additions Settings tab
