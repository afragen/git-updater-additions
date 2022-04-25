#### [unreleased]

#### 6.0.0 / 2022-04-24
* requires PHP 7.2+

#### 5.5.4 / 2022-03-10
* composer update

#### 5.5.3 / 2022-03-02
* update Freemius/wordpress-sdk

#### 5.5.2 / 2022-02-08
* use `sanitize_key()` for nonces
* update nonce check in `class Repo_List_Table`

#### 5.5.1 / 2022-02-05
* add nonce check for saving settings

#### 5.5.0 / 2021-11-15
* remove checkbox from list table
* update screenshot
* use `sanitize_title_with_dashes()` as `sanitize_file_name()` maybe have attached filter that changes output
* use filter to add repository types

#### 5.4.0 / 2021-08-03
* add settings for `Primary Branch` and `Release Asset`
* only use `esc_attr_e` for translating strings

#### 5.3.0 / 2021-07-05
* update Freemius for multisite
* remove Freemius from the autoloader
* uses new `class Fragen\Git_Updater\Shim` for PHP 5.6 compatibility, will remove when WP core changes minimum requirement

#### 5.2.4 / 2021-05-21
* add language pack updating

#### 5.2.3 / 2021-05-18
* ensure custom icon shows in update notice from Freemius

#### 5.2.2 / 2021-05-17
* update Freemius integration

#### 5.2.0 / 2021-05-03
* update branding logos

#### 5.1.0 / 2021-05-03
* add Freemius integration

#### 5.0.0 / 2021-04-15
* rebrand as Git Updater Additions
* update namespace
* gracefully exit if Git(GitHub) Updater not running.

#### 4.1.1 / 2021-03-12
* fix dropdown

#### 4.1.0 / 2021-03-07
* move action hook to main plugin file

#### 4.0.9 / 2021-02-18
* data validation for empty data on save

#### 4.0.8 / 2021-02-17
* data validation on saving

#### 4.0.6 / 2020-04-17
* can't use `sanitize_key` on an array

#### 4.0.5 / 2020-04-15
* more sanitize, less ignore

#### 4.0.4 / 2020-04-02
* sanitize, escape & ignore

#### 4.0.3 / 2020-03-13
* only add appropriate repo type to GitHub Updater

#### 4.0.2 / 2020-02-05
* ensure GitHub Updater is running

#### 4.0.1 / 2020-01-31
* add `uninstall.php`

#### 4.0.0 / 2010-01-28
* Refactored to use a Settings tab within GitHub Updater
* saves data in options table

#### 3.0.0 / 2010-11-19
* update for new version of GitHub Updater v9.0.0

#### 2.0.1
* wcps linter fixes

#### 2.0.0
* added `class Additions` to this plugin so it's now self-contained
* changed plugin requirements to mirror those of GitHub Updater

#### 1.0
* pseudo-initial release
