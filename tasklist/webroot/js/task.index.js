function findAll() {
    $.ajax({
        type: 'GET',
        url: 'http://localhost/taskList/tasklist/api/task',
        dataType: "json", // data type of response
        success: renderList
    });
}

function renderList(data){
	for (var i=0; i < data.data.length ; ++i ){
		$task = data.data[i];
		$('#rest-api-table > tbody:last-child').append('<tr><td>'+ $task.id +'</td><td>'+ $task.titulo +'</td><td>'+ $task.descricao +'</td><td>'+ $task.statustask_id +'</td><td>'+ $task.datacriacao +'</td><td></td></tr>');
    }
}

findAll();