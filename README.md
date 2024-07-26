## Yoast OpenGraph Featured Image Update Fix
Contributors: vegasgeek
Tags: yoast, seo, opengraph, featured image, og:image, wordpress
Stable tag: 1.0.1
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

## Description

**Yoast OpenGraph Featured Image Update Fix** ensures that the OpenGraph `og:image` tag is always up-to-date with the current featured image, regardless of how the image was changed. This plugin solves the issue where Yoast SEO may not update the `og:image` tag if the featured image was modified through methods other than the default WordPress post editor.

## Why This Plugin is Needen

Yoast SEO is a powerful tool for managing SEO metadata on your WordPress site, including OpenGraph tags. However, a [known issue](https://github.com/Yoast/wordpress-seo/issues/17721) is that Yoast does not always update the `og:image` tag when the featured image is changed via methods other than the standard WordPress post editor. This can lead to outdated or incorrect images being shared on social media platforms, potentially impacting your site's appearance and engagement.

## How It Works

This plugin hooks into the Yoast SEO filters to ensure that the `og:image`, `og:image:width`, `og:image:height`, and `og:image:type` tags are dynamically updated based on the current featured image of the post. It does this by:

1. **Replacing the `og:image` URL**: Ensures that the OpenGraph image URL matches the current featured image URL.
2. **Updating the `og:image:width` and `og:image:height` tags**: Retrieves and sets the correct dimensions of the current featured image.
3. **Setting the `og:image:type` tag**: Ensures the MIME type of the image is accurately reflected in the OpenGraph tags.

## Installation

1. Upload the plugin files to the `/wp-content/plugins/yoast-opengraph-featured-image-update-fix` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress.

## Frequently Asked Questions

- Why doesn't Yoast SEO always update the `og:image` tag?

Yoast SEO primarily updates the `og:image` tag when changes are made through the WordPress post editor. If the featured image is changed through other methods, such as custom scripts or plugins, Yoast may not detect these changes, leading to outdated `og:image` tags.

- How does this plugin ensure the `og:image` tag is correct?

This plugin uses WordPress hooks to dynamically update the `og:image` tag and related attributes whenever the OpenGraph metadata is generated, ensuring the tags always reflect the current featured image.

- Is this plugin compatible with all themes and plugins?

This plugin should be compatible with most themes and plugins. However, if you encounter any issues, please report them on the plugin's GitHub repository.

## Changelog

- 1.0.1
* Initial release.


## License

This plugin is licensed under the GPLv2 or later. For more information, see [https://www.gnu.org/licenses/gpl-2.0.html](https://www.gnu.org/licenses/gpl-2.0.html).
