# Live Wires - Web Development
## Working with forms

We've got a site now, and the server is building the page from lots of different include files, this is great, but the server isn't doing much work yet... So lets the server handling user input with a form!

First off, create a new file called `form.php` and add in your header and footer, navigation, and anything else. Now inside a new `<section>` tag create a new form:

```
<form method="post" action="form.php">
    ...
</form>
```

The `form` tag has a `method` and an `action`. We'll come back to the `method` later, but the `action` is important now- the action tells the server which file is going to handle the input. In this case we're going to tell the it to deal with itself...

We've got a form, but if you go back and refresh the page you'll see that there is nothing there. We need to add inputs to the form. In between the `<form>...</form>` tags add this:

```
<input type="text" name="txt_name" />
<input type="submit" value="Submit" />
```

The first input is a text field which allows users to type into a box. The submit button allows users to submit the form. Go back and refresh your page. What do you see? What happens when you try it?

The page refreshs, but nothing happens. We now need to write some `PHP` to handle the input.

You remember when we were writing the `form` tag it had a `method`? There are several methods we could have choosen, but we chose `post`. We need to ask `PHP` if anything has been submitted to the `post` variable.

Above your `<form>` we're going to display the contents of the input box. Add this:

```
<?php
  if ($_POST['txt_name']) {
    echo "Hello " . $_POST['txt_name'];
  }
?>
```

Try filling in the form now... What happens?
