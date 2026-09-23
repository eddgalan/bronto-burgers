const menuTabs = document.querySelectorAll('[data-filter]');
const menuPanels = document.querySelectorAll('[data-panel]');

menuTabs.forEach((tab) => {
    tab.addEventListener('click', () => {
        menuTabs.forEach((menuTab) => menuTab.classList.remove('active'));
        menuPanels.forEach((panel) => panel.classList.add('hidden'));

        tab.classList.add('active');

        document
            .querySelector(`[data-panel="${tab.dataset.filter}"]`)
            ?.classList.remove('hidden');
    });
});
