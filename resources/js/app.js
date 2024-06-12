import './bootstrap';

import * as notification from './notification';

document.addEventListener('livewire:init', () => {
    window.Livewire.on('message', (event) => {
        const title = event.title
        notification.default(title, 'success');
        notification.push(title);
    });
});

