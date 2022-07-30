//
// Snow theme
//

var quill = new Quill('#snow-editor', {
    theme: 'snow',
    modules: {
        'toolbar': [[{ 'font': [] }, { 'size': [] }], ['bold', 'italic', 'underline'], [{ 'color': [] }, { 'background': [] }], [{ 'list': 'ordered' }, { 'list': 'bullet' }]]
    },
});

