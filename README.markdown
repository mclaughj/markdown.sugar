# Markdown Sugar for Espresso

> Version __0.3.1__

_by David Czihak_

_thanks to Ian Beck_

[www.davidczihak.at](http://www.davidczihak.at/)

## Release notes

- Version 0.3.1
	- Snippets added
	- Fix: Images without alt attribute
- Version 0.3
	- Renamed selectors to conform better with [Espresso Sugar Standards][1]
	- Much more comprehensive support for basic Markdown syntax
	- Syntax coloring for simple HTML blocks
- Version 0.2
	- Improvements
- Version 0.1
	- Created basic Sugar  
	- Debugging and improvements

   [1]: http://github.com/elliottcable/espresso-sugar-standard/

## Known issues

- Setext headers are not properly detected
	- First-level Setext headers improperly trigger for some horizontal rules
	- Recommend not using `---------` as a horizontal rule, for example; even sticking some spaces in between dashes will stop it from triggering as a header
- HTML detection is very basic, and doesn't allow for Markdown in inline HTML blocks