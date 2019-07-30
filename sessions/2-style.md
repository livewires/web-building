# Adding style

In the last sheet we wrote a lot of `HTML` tags and added them inside the `<body>` tag. Currently our page is looking very black and white.

We can fix this, but to do this we need to use a different language to change the page design called `CSS`. `HTML` is used to define the page structure, `CSS` is used to define the style.

## CSS is not HTML

`CSS` exists in it's own file. Start by creating a new file called `style.css`.

As we have seen `HTML` is written in tags. `CSS` _references_ HTML tags, but it looks very different. Add these lines of `CSS` to your new `style.css`:

```css
body {
  background-color: red;
}
```

There are a couple of parts `CSS`:

**`Selectors`**

Selectors tells the `CSS` which `HTML` tag to apply the design to.

In this example the selector is the line `body {`. This tells the `CSS` to hook onto the `<body>` tag in the HTML.

**`Properties` and `Values`**

In this example there is just one property and value: `background-color: red`, but a selector can have many…

Hopefully it is clear what this does… these lines select the tag `body` and sets the `background-color` to be `red`.

Save your file and refresh the page…

Has anything changed? No? At the moment your `HTML` doesn't know about the `CSS`, we need to tell it to load in `style.css`.

Go back to your `HTML` file. Previously all our tags were added to `<body>` tag. Everything in the `<body>` gets outputted on screen. The tag before, the `<head>` tag, contains any additional information required to help the page know how to display the content. This is where we need to reference our `CSS`. This is done with a self closing `<link>` tag:

```html
<html>
  <head>
    …
    <link rel="stylesheet" href="style.css" />
  </head>

  <body>
    …
```

Save `index.htm` and refresh your web browser. You'll now have a page with a red background.

## Challenge

There are a couple of other properties and values that you can start playing with straight away. See what these do…

```CSS
body {
  background-color: red;
  text: white;
  font-family: sans-serif;
}
```

However you might want to pick some more interesting colours and more exciting fonts... Have a look at [CSSFontStack.com](http://cssfontstack.com) for some fonts and [color.adobe.com](http://color.adobe.com) for colours that you can copy and paste into the `body { ... }`.

Try adjusting the color of the background and text in other `html` tags…

---

[Go to the next sheet; Page layout >](2.1-page-layout.md)   
