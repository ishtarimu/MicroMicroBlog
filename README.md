# MicroMicroBlog
Micro blog for significant people.

## Edit
### Edit index.php
Put your blog title
```php
$Title = "your site title";
```
Edit your links
```php
$Links = array (
		"Your text here" 		=> "http://your_URL_Here.com/",
		"Your text here" 		=> "http://your_URL_Here.com/",
		"Your text here" 		=> "http://your_URL_Here.com/"
	);
```
### Edit add.php
Chose your security code.

You can generate it [here](https://www.random.org/strings/?num=1&len=20&digits=on&upperalpha=on&loweralpha=on&unique=on&format=plain&rnd=new)
```php
$code = "your code";
```
## Install
Just upload the two files.

## Add content
Go to `your-blog.com\add.php` and fill the form.

Push *Hop !*

## Tips
If you want to link to a particular post you can copy the link from the time stamp number of the post title.

## TODO
* check all the <\> (order of body head etc...)
* put the #timestamp in the ID attr of timestamp span


