# LiveWires - Adding style

In the last sheet we wrote a lot of `HTML` and added it into the `<body>` tag, but we didn’t touch the `<head>`. The `head` section is for all the information that the browser needs to display the content. So we’re going to add our styles using a language called `CSS` in there…

Styles hook on to the tag names and additional attributes added to the tags called a `class`.

Somewhere in between the `<head>` tags add in a new tag called `<style>` … `</style>`.

We going to start by applying some styles to the whole page; in between your `style` tags add:

```css
body {
    background-color: #ccc;
    color: #000;
    font-family: sans-serif;
}
```

This sets the background colour to be a (slightly boring) grey, the text colour to black and picks a simple font for the text. Save the file and press refresh in your browser. See the changes?

However you might want to pick some more interesting colours and more exciting fonts... Have a look at [CSSFontStack.com](http://cssfontstack.com) for some fonts and [color.adobe.com](http://color.adobe.com) for colours that you can copy and paste into the `body { ... }`

## Working on the header

I want to have a large image in the top of my site. So first I need to find an image! If you have taken one you can use it straight away, however most of the time you will need to find an image online. Google provides a easy method of finding images that we are allowed to use on our site; go to [http://j.mp/livewires-imagesearch](http://j.mp/livewires-imagesearch). Under the search box you can see that the search settings are showing images that are 'labeled for noncommercial reuse'. This means we can use them free of charge. Go ahead a search for an image that you want to use and save it to the computer.

Now that we have an image, we need to cut it down to fit the size that we want our header to be. My header is going to be 400 pixels (or `px`) high, and as wide as the screen. There are many different tools to crop images, if you have GIMP installed use that or have a look at [canva.com/photo-editor/](https://www.canva.com/photo-editor/). Open your image, and then in `image/image size` set the height of your image. Using the crop tool `image/crop` you can cut your image down to the right size. Finally save you image `File/save` back to your folder as `banner.jpg`.

Back in the `CSS` we're going to add some new styles:

```css
header {
    background: url('banner.jpg') no-repeat center center;
    background-size: cover;
    height: 400px;
    position: relative;
    color: #fff;
}
```

First we set the background image, and tell it to `cover` the whole header, then we set the header to be `400px` high, and the font colour to be white.

Save your file and refresh your page. Beginning to look good!

Depending on the image that you have chosen and the text colour, it may be hard to read the title, so lets fix that. While we're at it we can make the text stick to the bottom of the header:

```css
header hgroup{
    position: absolute;
    bottom: 0;
    margin: 0 auto;
    display: block;
    width: 100%;
    padding: 10px;
    background-color: rgba(0, 0, 0, 0.7);
    box-sizing: border-box;
}

    header h1, header h2 {
        margin: 0 auto;
        max-width: 800px;
    }
```

The first block of code sets the position of the `hgroup` tag to be at the `absolute bottom` of it's parent element (the `header`), and set it's background to be black. While the second block targets the `h1` and `h2` tags in the `header`, making sure that they have a width and they stay in the centre of the page.

## Tweaking the rest of the page

Add this into your `CSS`:

```css
section {
    background-color: #ccc;
    padding: 10px;
}

    section h2 {
        margin-bottom: 10px;
    }

    section p {
        margin: 20px 0;
    }

        section p:last-child{
            margin: 20px 0 0;
        }

footer {
    clear: both;
    padding: 10px;
}

    footer p {
        font-size: 12px;
        margin: 0;
    }
```

This will adjust the space all the elements. However now when you refresh your page you'll see that the `header` text sits nicely in the middle of the page, while the rest of the text is stuck to the left.

In the `CSS` add:

```css
.container {
    margin: 0 auto;
    max-width: 800px;
}
```

Now going back to the `HTML` below. In your `<section>` tag, but before your `<p>` tag add in `<div class="container">`, and then just before your closing `</section>` tag add in a closing `</div>` like this:

```html
<section>
    <div class="container">
        <p>Welcome...</p>
    </div>
</section>
```

Once you have done that, do the same in the footer and save and refresh the page.

---

[Go to sheet three: Pages >](3-pages.md)   
[Back to sheet one: Setup >](1-setup.md)
