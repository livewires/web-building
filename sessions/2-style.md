# Adding style

In the first sheets we have written a lot of `HTML` tags and added them inside the `<body>` tag. As a result our page is looking very black and white.

We can fix this, but to do this we need to use a different language to change the page design called `CSS`, `CSS` stands for _Cascading Style Sheets_. `HTML` is used to define the page structure, `CSS` is used to define the style.

## CSS is not HTML

`CSS` exists in it's own file. Start by creating a new file called `style.css`.

As we have seen `HTML` is written in tags - you can spot a tag because it is word surrounded by a less than symbol `<` and a greater than symbol `>` like this: `<h1>Hello World</h1>`. `CSS` _references_ HTML tags, but it looks very different.

Create a new file and add this to the file.

```css
body {
  background-color: red;
}
```

Save it at `style.css`.

There are a couple of parts `CSS`:

**`Selectors`**

Selectors tells the `CSS` which `HTML` tag to apply the design to.

In this example the selector is the line `body {`. This tells the `CSS` to hook onto the `<body>` tag in the HTML.

**`Properties` and `Values`**

In this example there is just one property and value: `background-color: red`, but a selector can have many…

Hopefully it is clear what this does… these lines select the tag `body` and sets the `background-color` to be `red`.

**Note**: Do you see how `color` is missing the letter `u`. This is the American spelling, `CSS` won't work if you spell color like a Brit.

Head back to your browser and refresh the page…

Has anything changed? No? At the moment your `HTML` doesn't know about the `CSS`, we need to tell it to load in `style.css`.

Go back to your `HTML` file. Previously all our tags were added to `<body>` tag. Everything in the `<body>` gets outputted on screen. The tag before, the `<head>` tag, contains any additional information required to help the page know how to display the content. This is where we need to reference our `CSS`. This is done with a self closing `<link>` tag:

```html
<html>
  <head>
    …
    <title>Page title</title>
    <link rel="stylesheet" href="style.css" />
  </head>

  <body>
    …
```
You might also want to use this opportunity to update the <title> tag in the `HTML` can you spot what that does? 

Save `index.html` and refresh your web browser. You'll now have a page with a red background.

## Challenge

Add the `<link rel="stylesheet" href="style.css" />` tag to all your `HTML` files so that you `CSS` is read by all of them.

There are a couple of other properties and values that you can start playing with straight away. See what these do…

```CSS
body {
  background-color: red;
  color: white;
  font-family: sans-serif;
}
```

Try adjusting the color of the text in other `html` tags like `<h1>` or `<p>`...

You might want to pick some more interesting colours and more exciting fonts:

- Fonts: [CSSFontStack.com](https://www.cssfontstack.com)
- Colors: [color.adobe.com](https://color.adobe.com)

