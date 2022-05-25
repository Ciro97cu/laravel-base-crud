const arrayJumbo = ["https://www.dccomics.com/sites/default/files/dc-hero_20220520_AAPI_NewSuper-Man_62881dd01788a0.73066572.jpg", "https://www.dccomics.com/sites/default/files/dc-hero_20220520_TTGDCSHG_Mayhem_62881e0115fcb7.71538310.jpg", "https://www.dccomics.com/sites/default/files/dc-hero_20220520_JurassicLeague_62881e6a5754b4.98346794.jpg", "/images/jumbotron.jpg"];

counter = 0;
const setImage = () => {
    document.getElementById("images").src = arrayJumbo[counter];
    counter = (counter + 1) % arrayJumbo.length;
};

setInterval(setImage, 3000);