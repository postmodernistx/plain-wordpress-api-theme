# WordPress API theme

A (visually) useless theme that just overrides the WordPress REST API with some features, like:

- Show _all_ posts instead of just 10

To be used as a REST API-theme, rather than a "out-of-the-box" theme.

## How to use
Put this in your themes folder:

`path-to-wordpress-installation/wp-content/themes/plain-api-wordpress-theme`

where the last part, `plain-api-wordpress-theme`, is the name of the theme folder, where all of the files in this project should be located (index.php, functions.php, screenshot.png, style.css).

Then go to WordPress admin view -> Appearance -> Themes and activate the theme.

## API Request
To get 100 posts per page, use:
```
https://your-wp-installation/wp-json/wp/v2/posts?per_page=100
```
