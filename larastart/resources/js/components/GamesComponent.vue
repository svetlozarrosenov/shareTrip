<template>
    <div class="row">
        <div v-for="game in games" class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">{{game.name}}</span>
                    <span class="info-box-number">
                        <small>{{game.description}}</small>
                    </span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</template>

<script>
    import axios from 'axios';

    export default {
        data () {
                return {
            }
        },
        computed: {
            games: function () {
                return this.$store.state.games;
            }
        },
        methods: {
            
        },
    }
</script>