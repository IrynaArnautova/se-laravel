//PARTS: Табы: смена по клику
export function partChangeByClick() {
    const tabs = document.querySelectorAll('.js_show-tab');
    tabs.forEach(item => {
        item.addEventListener('click', e => {
            const parentItem = e.target.closest('.js_parent-tab');
            const tab = item.getAttribute('data-tab');
            const tabContents = document.querySelector('#' + tab).closest('.js_parent-tab').querySelectorAll('.js_tab-content');
            parentItem.querySelectorAll('.js_show-tab').forEach(item => {
                item.classList.remove('active');
            })
            tabContents.forEach(item => {
                item.classList.remove('active');
            })
            document.querySelector('#' + tab).classList.add('active');
            item.classList.add('active');
        })
    })
}
