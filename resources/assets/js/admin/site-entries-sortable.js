// Default SortableJS
import Sortable from 'sortablejs';


export default class FaqSiteEntriesSortable {
    constructor(manager) {
        this.manager = manager;
        this.container = manager.container;
        this.init();
    }

    init() {
        const siteEntriesLists = this.container.querySelectorAll('.site-entries-list');
        if (siteEntriesLists.length < 1) {
            return;
        }

        siteEntriesLists.forEach((siteEntriesContainer) => {
            const storeOrderUrl = siteEntriesContainer.getAttribute('data-order-url');
            const sortable = Sortable.create(siteEntriesContainer, {
                animation: 150,
                onEnd: async () => {
                    const order = sortable.toArray();
                    await this.manager.post(storeOrderUrl, {order});
                }
            });
        });
    }
}
