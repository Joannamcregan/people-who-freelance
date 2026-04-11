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
            this.menu.addClass('fadeIn');
            setTimeout(()=>{
                this.menu.removeClass('fadeIn')
            }, 700);
            setTimeout(()=>{
                this.closeMenu.removeClass('invisible');
            }, 750);
        })
        this.closeMenu.on('click', ()=>{
            this.menu.addClass('fadeOut');
            setTimeout(()=>{
                this.menu.addClass('hidden');
                this.menu.removeClass('fadeOut');
                this.menuLink.removeClass('hidden');
            }, 750);
        })
    }
}

export default Menu;