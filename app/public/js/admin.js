document.addEventListener('DOMContentLoaded', () => {
    const modal = document.querySelector('.modal');
    const close = document.querySelector('.close-btn');

    document.querySelectorAll('.edit-btn').forEach(btn => {
        btn.addEventListener('click', () => {
            const row = btn.closest('tr');
            const cells = row.querySelectorAll('td');

            document.getElementById('kit-id').value = btn.dataset.id;
            document.querySelector('[name="team"]').value = cells[0].innerText;
            document.querySelector('[name="season"]').value = cells[1].innerText;
            document.querySelector('[name="price"]').value = cells[2].innerText.replace('£', '');

            modal.style.display = 'block';
        });
    });

    close?.addEventListener('click', () => {
        modal.style.display = 'none';
    });

    window.addEventListener('click', (e) => {
        if (e.target === modal) {
            modal.style.display = 'none';
        }
    });
});
