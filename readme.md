# Kirby SEO basics

This repository acts as a tiny guide (with certain files to help you out) to set up your Kirby site with basic SEO.

So far I've included the following:

* Sitemap [credit](https://getkirby.com/docs/cookbook/xmlsitemap)
* Robots.txt
* Open graph meta tags

I have written a quickstart guide for each component.

### Sitemap

Files needed:
* /content/sitemap
* /site/templates/sitemap.php

Copy the /content/sitemap folder to your own content folder. This folder only exists to generate a route and load the template, the content file inside it is empty.

Place the sitemap.php template in your own /site/templates/ folder. Visit your site and navigate to http://<your-url>/sitemap to test the template. You should see an XML sitemap.

Visit the [Google Search Console](https://www.google.com/webmasters/tools/home), register your domain (both HTTP and HTTPS) and then [submit your sitemap to Google](https://www.google.com/webmasters/tools/sitemap-list). You can also test the submitted sitemap.

### Robots.txt

Files needed:
* robots.txt

This is a barebones, basic robots.txt. Copy it your website's root folder and change the sitemap URL inside it to the one you generated in the last step.

### Meta tags & Open Graph tags

Files needed:
* /blueprints/site.yml
* /snippets/header.php

If you haven't made any customizations to your site.yml, simply replace yours with the one from this repo. If you have modified your own site blueprint, append the following fields:

```yml
description:
  label: Description
  type:  textarea

og_title:
  label: Open Graph title
  type:  text

og_site_name:
  label: Open Graph site name
  type:  text

og_description:
  label: Open Graph description
  type:  textarea

og_image:
  label: Open Graph image
  type:  image
```

You can now browse to <your-url>/panel/options and fill in your title, meta description and Open graph information.

Once you've done this, copy the header.php snippet to your /snippets folder. If you don't want to override your own, make sure to add the following tags to yours:

```php
<meta name="description" content="<?= $site->description()->html() ?>">

<meta property="og:title" content="<?= $site->og_title()->html() ?>" />
<meta property="og:site_name" content="<?= $site->og_site_name()->html() ?>">
<meta property="og:type" content="website">
<meta property="og:description" content="<?= $site->og_description()->html() ?>" />
<meta property="og:url" content="<your-url>" />
<meta property="og:image" content="<?= $site->og_image()->html() ?>" /> 
```

You can now use the header snippet in any template. I've included a very basic default template to illustrate.

## Conclusion

That's it. You should now have a working sitemap, robots.txt & meta tags on your Kirby website.


## Contact
The easiest way to contact me about this is through Twitter: [@dreadnip](https://twitter.com/dreadnip).

If you have any issues or suggestions, please let me know.