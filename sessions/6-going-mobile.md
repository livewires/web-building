# Live Wires - Web Development
## Going mobile

Our site is looking good on this screen... but what about on mobile phones? How will it work there? Try reducing the width of your browser? It probably works fine, but could look better.

Lets look at the header, it will probably take up over half the mobile screen, far too much! Look at the `CSS`, why is it so tall?

`CSS` has a feature called `media queries`, they allow you to adjust the style sheet based on the width of the screen. At the moment your `CSS` applies to all of your design, but with media queries we can target specific screen sizes, or override existing styles. Have a look at this example

```
header {
    ...
    height: 200px;
    ...
}

@media (min-width: 600px) {
    header {
        height: 400px;
    }
}
```

This tells the `header` to start off at a height of 200px, but if the browser width is greater than 600px, then increase the height of the `header` to 400px. Give it a try. See how it works.

How could you try with other styles in the `CSS`?

If you want to test your site in a phone have a look at this page: [Mobile tester](http://tester.jamesdoc.com/?url=http://livewires.dev)
