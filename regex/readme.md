## Regular expression syntax

- Find / then a string.
- Find any number of characters.. '.*?'
- Optionally find a value.. (?:$value)?
- It can chain method calls. find('www')->maybe('.')->then('google')
- It can exclude values. find('foo')->anythingBut('bar')->then('biz')
