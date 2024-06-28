<div id="like-container">
    <p>{{ trans_choice('{0} no likes|{1} :count like|[2,*] :count likes', $model->likes->count(), ['count' => $model->likes->count()]) }}</p>
    
    @can('like', $model)
        <button id="like-button" onclick="likeModel()">Like</button>
    @endcan

    @can('unlike', $model)
        <button id="unlike-button" onclick="unlikeModel()">Unlike</button>
    @endcan
</div>

<script>
    async function likeModel() {
        const response = await fetch(`{{ route('like') }}`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
            },
            body: JSON.stringify({
                likeable_type: '{{ get_class($model) }}',
                id: '{{ $model->id }}'
            })
        });

        if (response.ok) {
            // Handle successful like
            console.log('Model liked successfully');
        } else {
            // Handle error
            console.error('Failed to like the model');
        }
    }

    async function unlikeModel() {
        const response = await fetch(`{{ route('unlike') }}`, {
            method: 'DELETE',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
            },
            body: JSON.stringify({
                likeable_type: '{{ get_class($model) }}',
                id: '{{ $model->id }}'
            })
        });

        if (response.ok) {
            // Handle successful unlike
            console.log('Model unliked successfully');
        } else {
            // Handle error
            console.error('Failed to unlike the model');
        }
    }
</script>
