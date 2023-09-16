
import userData from "./data/RacesOfSeishun.json"

Vue.createApp({
    data() {
        return {
            titleClass: "title",
            message: "Oh my gawsh, what a test this is!",
            races: userData,
        }
    }
}).mount('#app')