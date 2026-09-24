document.addEventListener('click', (event) => {
    const selectedTab = event.target.closest('[data-filter]');

    if (!selectedTab) {
        return;
    }

    const selectedPanel = document.querySelector(
        `[data-panel="${selectedTab.dataset.filter}"]`,
    );

    if (!selectedPanel) {
        return;
    }

    document.querySelectorAll('[data-filter]').forEach((menuTab) => {
        menuTab.classList.toggle('active', menuTab === selectedTab);
    });

    document.querySelectorAll('[data-panel]').forEach((panel) => {
        panel.hidden = panel !== selectedPanel;
    });
});
