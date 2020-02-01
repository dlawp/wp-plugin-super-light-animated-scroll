# Super Light Animated Scroll to id

Super light and easy to setup links that scroll the page smoothly to any id within the document.


## How to use it?

1. Make sure you have jQuery installed. For now the plugin does not support sites without jQuery installed.
2. Add HTML id attribute to element you want to scroll to, for example:
```
<h1 id="your-anchor">Header we will be drawn to smoothly!</h1>
```

3. Add hash to href attribute and class attribute to an A tag or element containing A tag, for example:
```
<a href="#your-anchor" class="sl-animated-scroll">
    Get me smoothly to my anchor!
</a>
```


## How to hook menu / nav links?

1. Go to Appearance -> Menus.

2. Make sure you have enabled classes in Screen Options (top right corner).

3. Create new Custom Link 

4. Add your anchor in URL of the custom link, for example:
```
/#your-anchor
```

5. Insert special class to the custom link:
```
sl-animated-scroll
```

6. Save and try it!


## Support

If any problems, questions or suggestions please contact us at support@dlawp.pl

GitHub: https://github.com/dlawp/wp-plugin-super-light-animated-scroll