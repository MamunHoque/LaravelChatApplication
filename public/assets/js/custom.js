if (localStorage.getItem('color-scheme')) {
    let scheme = localStorage.getItem('color-scheme');

    const LTCSS = document.querySelectorAll('link[class=css-lt]');
    const DKCSS = document.querySelectorAll('link[class=css-dk]');

    [...LTCSS].forEach((link) => {
        link.media = (scheme === 'light') ? 'all' : 'not all';
    });

    [...DKCSS].forEach((link) => {
        link.media = (scheme === 'dark') ? 'all' : 'not all';
    });
}
