<!DOCTYPE html>
<html lang="en">
    <?php require 'required/header.php'?>
    <body>
        <?php require 'required/navbar.php'?>
        <div class="pageLayout">
            <div class="center">
                <h1 class="sectionHeader">The World of Asha</h1>
                <img class="worldMap" src="data/images/World Map.jpg">
            </div>

            <h2>Seishun</h2>
            <p>Seishun is considered a sacred place by the <a href="religions.php">Western Spiritualists</a> who call it home. Most of the people living here reside in the northeastern part of the continent and consider the west to be forbidden, because that part of the continent is an untamed wilderness where strange forces are said to dwell. Yet those brave enough to venture out and powerful enough to return alive claim there's much to discover out there.</p>
            <p>Additionally it is the home of Esalona, where our adventure begins.</p>

            <h2>Akalush</h2>
            <p>Akalush is infamous for being the home of the Empire of Light, an empire ruled by celestials and the biggest political power in the world. They are especially despised by many humans, who are viewed as slaves within Akalush's racial caste.</p>
            <p>Despite their notoriety, Akalush is considered a pleasant place for those exempt from their racial discrimination.</p>
            
            <h2>Drechen</h2>
            <p>Although the natives of Seishun only established trade with Drechen within the past century, they've come to know it as a cold place where mountains are sacred and personal freedoms are highly valued. They known for being very fine craftsmen responsible for the magitech guns sometimes found in Seishun's market.</p>
            
            <h2>Antoen</h2>
            <p>This mostly uninhabited continent is considered to be of little importance, but anyone who's traveled between Drechen and Seishun has heard of it. It's a common rest stop for travelers who don't feel safe stopping in Akalush, giving them a reprieve from their long journey across the ocean.</p>

            <!-- Vue display -->
            <!-- <ul>
                <li v-for="race in races" :key="race.id">
                    {{race.common.name}}
                </li>
            </ul> -->
            <!-- <div id="app"><p v-bind:class="titleClass">{{ message }}</p></div> -->
        </div>
        <script src="scripts/asha.js"></script>
        <script src="https://unpkg.com/vue@3"></script>
        <script src="scripts/vueApps.js"></script>
        <!-- <script src="scripts/components.js"></script> -->
    </body>
</html>