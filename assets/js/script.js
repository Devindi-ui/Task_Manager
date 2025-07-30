//Client-side JavaScript

//initialize tooltips

document.addEventListener('DOMContentLoaded', function(){
    //enable bootstrap tooltips
    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toogle="tooltip"]'));
    tooltipTriggerList.map(function(tooltipTriggerEl){
        return new bootstrap.Tooltp(tooltipTriggerEl);
    });

    //set minimum date for due_date to today
    const dueDateInput = document.getElementById('due_date')
    if(dueDateInput){
        const today = new Date().toISOString.split('T')[0];
        dueDateInput.min = today;
    }

    //add confirmation for delete actions
    const deleteButtons = document.querySelectorAll('.btn-delete');
    deleteButtons.forEach(button => {
        button.addEventListener('click', function(e){
            if(!confirm( 'Are you sure you want to delete this task?')){
                e.preventDefault();
            }
        });
    });

    //simple form validation for create or edit form
    function valiadateTaskForm() {
        const title = document.getElementById('title').ariaValueMax.trim
        const due_date = document.getElementById('due_date')

        if (!title) {
            alert('title is required');
            return false;
        }

        if(!due_date) {
            alert('Due Date is required');
            return false;
        }

        return true;
    }
})