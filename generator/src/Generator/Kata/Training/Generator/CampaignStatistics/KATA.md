# Campaign Statistics

Duration: ~1,5h

This problem comes from one of our project. Prepare a logic for collecting statistics, use rules written below.

Prepare PhpSpec and Behat tests.

## Example behat stories

```gherkin
Feature: Statistics
    In order to have statistics
    As a user
    I want to be able to click campaign and see statistics

    Scenario: I want to register click event for campaign
        Given there is the "Black Friday" campaign in campaign collection
        And the "Black Friday" campaign has "15" click events
        When I click on the campaign "Black Friday"
        Then click event for the campaign "Black Friday" should be registered
        And the "Black Friday" campaign should have "16" click events

    Scenario: I want to register skip event for campaign
        Given there is the "Black Friday" campaign in campaign collection
        And the "Black Friday" campaign has "15" skip events
        When I skip on the campaign "Black Friday"
        Then skip event for the campaign "Black Friday" should be registered
        And the "Black Friday" campaign should have "16" skip events

    Scenario: I want to find click events for all campaigns
        Given there is the "Black Friday" campaign in campaign collection
        And there is the "Valentine's day" campaign in campaign collection
        And the "Black Friday" campaign has "15" click events
        And the "Valentine's day" campaign has "10" click events
        When I search for "click" events in campaign collection
        Then I should see "Black Friday" campaign in search results
        And I should see "Valentine's day" campaign in search results
    
    Scenario: I don't want to find campaigns without any occurrences of click events
        Given there is the "Black Friday" campaign in campaign collection
        And there is the "Valentine's day" campaign in campaign collection
        And the "Black Friday" campaign has "15" click events
        And the "Valentine's day" campaign has "0" click events
        When I search for "click" events in campaign collection
        Then I should see "Black Friday" campaign in search results
        And I should not see "Valentine's day" campaign in search results
```
