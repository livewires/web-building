# LiveWires - Web Development
## Server Side Includes

Great! We've now got several pages across the site all looking great. Well done! However, have you noticed that it is a bit of a pain if you want to add a new page? You have to go into each page that you've created an update the navigation in each file. It's a bit of a pain. It would be much easier if we could just edit one file and get the server to update everything else for us...

So, that's what we're going to do! In the same way that `CSS` allows us to update the design across every page `PHP` allows the server to generate `HTML` for us on each page. This means that we can update the navigation in one file and include it in many other files.

To start off with we need to create a new folder called `includes` and inside it create a file called `navigation.php`

Now you have done that you can copy and paste the `<nav>...</nav>` tag and it's contents into your newly created `navigation.php` file. Save it!

Make sure all your files are closed within the text editor because we're going to start renaming things... Did you notice how we created the navigation file and gave it the extension `.php` rather than `.html`. That is because we need to tell the server that these files should be read as `PHP` rather than just `HTML`. We must update all the `.html` files and rename them as `.php`. For example `index.html` should become `index.php`.

> You may get a warning about changing the file extension. Don't worry about that, just make sure you have changed it from `.html` to `.php` and haven't made any typos.

With that done we can start telling each page to include the new `navigation.php` file. Start with `index.php` and delete everything in the `<nav>` tag, including the `<nav>` tag itself.

In it's place include a new line:

```php
<?php include_once('includes/navigation.php'); ?>
```

This is a line of `PHP` code. The `<?php` says that it isn't `HTML` code, then the `include_once(...)` says read the contents on another file and include it in the page. Go through each of your pages and replace the `<nav>` tag with this `include_once()` tag.

Now you have this done, go back into the browser and refresh the page. If you've done everything correctly... nothing should change.

But what's the problem? Have you tried clicking any of the links? They don't work now. Why?

Have a look at `includes/navigation.php`... where are all the links pointing at? Currently they are pointing `.html` files, they should be pointing to the new `.php` files. Quickly update them in `navigation.php` and then refresh the page. The links should now be working, not just in your homepage, but everywhere. Try adding a new link to the navigation. Magic!

Have a look through the rest of your `HTML`. Is there any other code that is repeated across every file? Could that be moved to an include file?
