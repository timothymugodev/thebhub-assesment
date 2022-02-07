const createCommentBtn = document.getElementById('comment-submit');

createCommentBtn.addEventListener("click", async(e) => {
    e.preventDefault();
    const comment = document.getElementById('comment-message').value;
    const objectType = "article";

    const dataToSend = {
        object_id: objectId,
        author_id: creator,
        object_type: objectType,
        content: comment
    }

    await axios.post('/api/v1/comments', dataToSend, {
        headers : {
            'X-CSRF-TOKEN' : document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            'Accept' : 'application/json',
            'Content-Type' : 'application/json'
        },
        withCredentials : true
    }).then(res  => {
        if(res.status === 201) {
            swal({
                title : 'Success',
                text : 'Comment created successfully',
                icon : 'success'
            });
        }
    }).catch(err => {
        const response = err.response;
        if(response.status !== 201){
            swal({
                title : 'Success',
                text : 'An error occured',
                icon : 'error'
            });
        }
    })
    
})
