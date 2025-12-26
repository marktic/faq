// Default SortableJS
import Sortable from 'sortablejs';


export default class FaqSiteCategoriesSortable {
    constructor(manager) {
        this.manager = manager;
        this.container = manager.container;
        this.init();
    }

    init() {
        const siteCategoriesContainer = this.manager.siteCategoriestContainer;
        if (!siteCategoriesContainer) {
            return;
        }
        this.sortable = Sortable.create(siteCategoriesContainer, {
            animation: 150,
            onEnd: () => {
                this.saveOrder();
            }
        });
    }

    async saveOrder() {
        const order = this.sortable.toArray();
        await this.manager.post(this.manager.storeOrderUrl, {order});
    }
}