* [Introduction](#introduction)

## Introduction {#introduction}

Livewire offers a `wire:init` directive to run an action as soon as the component is rendered. This can be helpful in cases where you don't want to hold up the entire page load, but want to load some data immediately after the page load.

@component('components.code-component')
@slot('class')
@verbatim
class ShowPost extends Component
{
    public $readyToLoad = false;

    public function loadPosts()
    {
        $this->readyToLoad = true;
    }

    public function render()
    {
        return view('livewire.show-posts', [
            'posts' => $this->readyToLoad
                ? Post::all()
                : [],
        ]);
    }
}
@endverbatim
@endslot
@slot('view')
@verbatim
<div wire:init="loadPosts">
    <ul>
        @foreach ($posts as $post)
            <li>{{ $post->title }}</li>
        @endforeach
    </ul>
</div>
@endverbatim
@endslot
@endcomponent

The `loadPosts` action will be run immediately after the Livewire component renders on the page.
