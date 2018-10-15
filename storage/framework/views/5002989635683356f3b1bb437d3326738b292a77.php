<div class="form-group">
    <?php echo Form::label('title', 'Title: '); ?>

    <?php echo Form::text('title', null, ['class'=>'form-control']); ?>

</div>

<div class="form-group">
    <?php echo Form::label('body', 'Body: '); ?>

    <?php echo Form::textarea('body', null, ['class'=>'form-control']); ?>

</div>

<div class="form-group">
    <?php echo Form::label('published_at', 'Publish on:'); ?>

    <?php echo Form::input('date', 'published_at', isset($article)?$article->published_at->format('Y-m-d'):\Carbon\Carbon::now()->format('Y-m-d'), ['class'=>'form-control']); ?>

</div>

<div class="form-group">
    <?php echo Form::label('tag_list', 'Tags: '); ?>

    <?php echo Form::select('tag_list[]', $tag_list, null,
    ['multiple', 'class' => 'form-control']); ?>

</div>

<div class="form-group">
    <?php echo Form::submit($submitButtonText, ['class'=>'btn btn-primary form-control']); ?>

</div>





    
    


    
    



    
    



    
    
    



    


    

