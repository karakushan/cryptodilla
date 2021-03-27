<template>
    <div class="vue-filepond">
        <input ref="filepond" type="file"
               class="filepond"
               name="filepond"
               :accept="accept"/>
        <input type="hidden" :name="name" v-model="file">
    </div>
</template>

<script>
import * as FilePond from "filepond";
import FilePondPluginFileValidateType from 'filepond-plugin-file-validate-type';
import FilePondPluginImageExifOrientation from 'filepond-plugin-image-exif-orientation';
import FilePondPluginImagePreview from 'filepond-plugin-image-preview';
import 'filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css';
import FilePondPluginImageEdit from "filepond-plugin-image-edit";
import FilePondPluginImageResize from "filepond-plugin-image-resize";
import FilePondPluginImageCrop from "filepond-plugin-image-crop";
import FilePondPluginImageTransform from "filepond-plugin-image-transform";

// Import the plugin styles
import "filepond-plugin-image-edit/dist/filepond-plugin-image-edit.css";

import "filepond/dist/filepond.min.css";


// Select the file input and use
// create() to turn it into a pond


export default {
    name: "Filepond",
    data() {
        return {
            file: this.value,
            files: this.value ? [
                {
                    source: this.value,
                    options: {
                        type: 'local',
                    },
                },
            ] : []
        }
    },
    props: {
        label: {
            type: String,
            default: `Drag & Drop your picture or <span class="filepond--label-action">Browse</span>`
        },
        options: {
            type: Object,
            default() {
                return {}
            }
        },
        name: {
            type: String,
            default: 'file'
        },
        accept: {
            type: String,
            default: 'image/png, image/jpeg, image/gif, image/svg+xml'
        },
        value: {
            type: String,
            default: ''
        }
    },
    mounted() {
        FilePond.registerPlugin(
            FilePondPluginFileValidateType,
            FilePondPluginImageExifOrientation,
            FilePondPluginImagePreview,
            FilePondPluginImageCrop,
            FilePondPluginImageResize,
            FilePondPluginImageTransform,
            FilePondPluginImageEdit
        );
        FilePond.setOptions({
            server: {
                url: '/filepond',
                process: {
                    url: '/process',
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                        'fileName': 'filepond'
                    },
                    withCredentials: false,
                    onload: (response) => {
                        if (response.length) this.file = response
                    },
                    onerror: (response) => response.data,
                },
                revert: '/revert',
                remove: '/remove',
                restore: null,
                fetch: null,
            },
            onload: (response) => {
                console.log(response);
            },
        });

        FilePond.create(
            this.$refs.filepond,
            {
                files: this.files,
                labelIdle: this.label,
                imagePreviewHeight: 170,
                imageCropAspectRatio: '1:1',
                imageResizeTargetWidth: 200,
                imageResizeTargetHeight: 200,
                stylePanelLayout: 'compact circle',
                styleLoadIndicatorPosition: 'center bottom',
                styleProgressIndicatorPosition: 'right bottom',
                styleButtonRemoveItemPosition: 'left bottom',
                styleButtonProcessItemPosition: 'right bottom',
                ...this.options
            }
        );
    }
}
</script>

<style scoped>

</style>
