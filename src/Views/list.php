<?php

/**
 * @var TaskEntity[] $tasks
 */
?>
<!-- Code HTML du template -->


<?php
echo get_header( [ 'title' => 'Accueil' ] );
?>
  <div class="container mx-auto flex flex-row items-stretch space-x-8">
    <!-- Filters -->
    <aside class="block w-1/4 mt-[7.1rem]">
      <?= get_template( __PROJECT_ROOT__ . "/Views/fragments/filter-form.php", array(
        // TODO y aura sûrement un truc à faire ici 🤔
        'search' => $_GET['search'] ?? null,
        'orderBy' => $_GET['order-by'],
        'hideCompleted' => $_GET['only-show-completed'] === 'on'    
      )); ?>
    </aside>
    <!-- /Filters -->
    
    <main class="container mx-auto flex-1">
      <!-- Header + Search Form -->
      <header class="flex flex-row mt-8 items-center justify-space-between  mb-8">
        <h1 class="text-2xl font-bold uppercase tracking-widest flex-1">
          Tâches
        </h1>
        
        <a class="p-4 rounded bg-teal-400 hover:bg-teal-500 duration-300 transition-colors flex items-center font-medium text-sm uppercase text-white tracking-widest justify-center" href="/task">
          Créer <i class="iconoir-plus-circle block ml-2 text-xl"></i>
        </a>
      </header>
      <!-- /Header + Search Form -->
      
      <form method="post">
        
        <!-- Task -->
        <?php
          //var_dump( $tasks );
          $date = NULL;
           
          foreach ($tasks as $task) {
            if ($task->getCreatedAt() != $date) :       
              $date = $task->getCreatedAt();
              $fixed = date('d-m-Y', strtotime($date));
              echo $fixed;
            endif;
            echo get_template( __PROJECT_ROOT__ . "/Views/fragments/task-card.php", [
              'task' => $task
            ] );
          }
        ?>
        <!-- Pagination + Submit -->
        <div class="flex flex-row justify-space-between items-center">
          <!-- Submit -->
          <button type="submit" class="p-4 rounded bg-teal-400 hover:bg-teal-500 duration-300 transition-colors flex items-center font-medium text-sm uppercase text-white tracking-widest justify-center">
            Enregistrer <i class="iconoir-check block ml-2 text-xl"></i>
          </button>
          
          <!-- Pagination -->
          <div class="flex-1 flex flex-row justify-end space-x-4 my-8">
            <a class="block bg-slate-50 hover:bg-slate-200 rounded p-4 text-sm cursor-pointer transition-colors duration-300">
              1
            </a>
            <a class="block bg-slate-50 hover:bg-slate-200 rounded p-4 text-sm cursor-pointer transition-colors duration-300">
              2
            </a>
            <a class="block bg-slate-50 hover:bg-slate-200 rounded p-4 text-sm cursor-pointer transition-colors duration-300">
              3
            </a>
          </div>
        </div>
        <!-- /Pagination -->
      </form>
    </main>
  </div>
  
<?php echo get_footer(); 
?>