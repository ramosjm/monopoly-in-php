# monopoly-in-php
Wanted to try this again using PHP and XAMPP.
Why? I use PHP for work and need more practice. Otherwise I would not recommend doing this...


##Seed data:
I'm feeling particularly helpful and have added the seed data here for the db cz manually typing that was rough.
Down point to this is that it includes some columns, which can dictate how you go through this project.
Bear in mind that this is an export from PHPMyadmin.
<br>

#XAMPP steps:
Install it (I use a mac).
I set up virtual hosts to help me keep projects separate.<br>
https://jonathannicol.com/blog/2012/03/11/configuring-virtualhosts-in-xampp-on-mac/

##MVP:

- Must be able to choose 2-4 players
- Must have 40 all tiles present (properties, utilities, transport, tax, chance and community chest)
- Store tiles in PHPMyadmin database.
- Must be able to render the board (Using the info from the db)
- Players must be able to roll (a random number) 
- Players must be able to move around the board
- Players must be able to purchase tiles (tiles cannot be held by multiple players)
- Players will receive money whenever they pass go
- Players cannot have negative money

##Extenstions:

- Players will lose money if landed on tax
- Players will will pay rent when landing on another players property
- Implement houses and hotels
- Imprement rent scaling for houses and hotels
- Implement go to jail mechanism
- Implement community chest cards (This will most likely escalate into a big project)
- Implement chance cards (So will this...)