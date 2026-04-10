import $ from 'jquery';
class Menu {
    constructor(){
        this.menuLink = $('#menu-link');
        this.menu = $('#menu-container');
        this.closeMenu = $('#close-menu');
        this.events();
    }
    events(){
        this.menuLink.on('click', ()=>{
            this.menuLink.addClass('hidden');
            this.menu.removeClass('hidden');
        })
    }
}

export default Menu;