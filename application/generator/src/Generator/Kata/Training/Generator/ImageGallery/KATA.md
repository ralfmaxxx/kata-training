# Image Gallery

Duration: ~1,5h

This problem comes from one of our project. Prepare a logic for displaying article image, use rules written below.

Prepare PhpSpec and Behat tests.

## Rules
* when article has more than one gallery items - show image gallery
* when article has only one gallery item - show single image
* when article does not have gallery items, but have frontpage image - show this image
* when article has neither gallery items nor frontpage image - do not show image

## Example behat stories

```gherkin

Feature: Displaying article image
    In order to see more attractive content
    As a visitor
    I want to see article's images
    
    Scenario: Display image gallery
        Given there is an article "Kata's are the best way to learn BDD" in CMS
        And article "Kata's are the best way to learn BDD" has gallery items:
            | src        | title          |
            | image1.png | First session  |
            | image2.png | Second session |
        When I get article "Kata's are the best way to learn BDD" from CMS
        Then the article should have image gallery
        
    Scenario: Display single article image
        Given there is an article "Kata's are the best way to learn BDD" in CMS
        And article "Kata's are the best way to learn BDD" has gallery items:
            | src        | title          |
            | image1.png | First session  |
        When I get article "Kata's are the best way to learn BDD" from CMS
        Then the article should have image "First session"
        
    Scenario: Display frontpage article image
        Given there is an article "Kata's are the best way to learn BDD" in CMS
        And article "Kata's are the best way to learn BDD" has frontpage image:
            | src        | title       |
            | image3.png | Lot of fun! |
        When I get article "Kata's are the best way to learn BDD" from CMS
        Then the article should not have image gallery
        And the article should not have image "First session"
        But the article should have frontpage image "Lot of fun!"
    
    Scenario: Do not display article image
        Given there is an article "Kata's are the best way to learn BDD" in CMS
        When I get article "Kata's are the best way to learn BDD" from CMS
        Then the article should not have image gallery
        And the article should not have image
        And the article should not have frontpage image
        
```
