# LiveWires - Improvements

Now you’ve gone through the first three worksheets you have the skills to make some great looking websites. There are some great resources online to teach you how to use all `html` elements and `css` properties.

**HTML**
https://developer.mozilla.org/en-US/docs/Web/HTML/Element

**CSS**
https://css-tricks.com/almanac/

However you might have noticed that when you made a change to the `css` you had to make the changes across both your files. That isn’t great… it’s going to get pretty confusing as your site gets bigger.

We can create a new file specifically for `CSS` and then tell our `HTML` pages to look at it. This means that each time you make changes to the style you only need to change one file.

The first thing we need to do is to create a new folder called `assets`. Then open up `index.html` copy all the `CSS` in between the `style` tags. Next create a new file and paste your `CSS` into it. Save this new file in the `assets` folder as `style.css`.

Now that the `CSS` is in a separate file we can delete it and the `<style>` tag from the `<head>` of every page and replace it with one link of code that tells the page where to look for the styles:

```
<link rel=“stylesheet” href=“assets/style.css” />
```

This looks a little bit like the `a` tag that we used to create links to different pages. The `rel` bit tells the browser that it is getting a bit of `css` and the `href` tells the browser where the `css` is; in the `assets` folder find `style.css`.

Add this line to both your `index.html` and your second page. Save them both and visit the page in your browser. Hopefully nothing has changed, but now if you want to change a style you can just edit the one file. Go and try it; change the background colour of your body by adjusting:

```
body {
	background-color: #00ff00;
}
```

Both pages should now be green!
