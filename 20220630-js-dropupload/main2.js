

const droparea = document.querySelector('.droparea');

droparea.addEventListener('dragenter', active);
droparea.addEventListener('dragover', active);
droparea.addEventListener('dragleave', inactive);
droparea.addEventListener('drop', inactive);
droparea.addEventListener('drop', handleDrop);

function active(e)
{
    e.preventDefault();
    droparea.classList.add("green-border");
}

function inactive(e)
{
    e.preventDefault();
    droparea.classList.remove("green-border");
}

function handleDrop(e)
{
    const dt = e.dataTransfer;
    const files = dt.files;
    const fileArray = [...files];
    console.log(files); // FileList
    console.log(fileArray);
}

