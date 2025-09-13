<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>STUDENT'S LIST</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gradient-to-br from-indigo-900 via-indigo-800 to-indigo-700 flex items-center justify-center p-6">

  <div id="app" class="relative w-full max-w-6xl bg-white/90 backdrop-blur-md rounded-2xl shadow-2xl p-10 flex flex-col gap-8">

    <div class="flex flex-col sm:flex-row items-center justify-between gap-4">
      <h1 class="text-3xl sm:text-4xl font-extrabold text-indigo-900 tracking-tight">
         Student Records
      </h1>
      <a href="<?=site_url('students/create');?>"
         class="inline-block bg-gradient-to-r from-indigo-600 to-indigo-800 text-white font-semibold px-6 py-3 rounded-xl shadow hover:from-indigo-700 hover:to-indigo-900 transition duration-300 ease-in-out">
        + Add Student
      </a>
    </div>


    <div class="overflow-x-auto border border-indigo-200 rounded-xl shadow-md">
      <table class="w-full text-left border-collapse">
        <thead class="bg-gradient-to-r from-indigo-600 to-indigo-700 text-white">
          <tr>
            <th class="px-6 py-4 text-sm font-semibold uppercase tracking-wider">ID</th>
            <th class="px-6 py-4 text-sm font-semibold uppercase tracking-wider">First Name</th>
            <th class="px-6 py-4 text-sm font-semibold uppercase tracking-wider">Last Name</th>
            <th class="px-6 py-4 text-sm font-semibold uppercase tracking-wider">Email</th>
            <th class="px-6 py-4 text-sm font-semibold uppercase tracking-wider">Actions</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-indigo-200 bg-white">
          <?php foreach (html_escape($users) as $user): ?>
          <tr class="hover:bg-indigo-50 transition duration-200">
            <td class="px-6 py-4 text-sm font-medium text-indigo-900"><?= $user['id']; ?></td>
            <td class="px-6 py-4 text-sm"><?= $user['first_name']; ?></td>
            <td class="px-6 py-4 text-sm"><?= $user['last_name']; ?></td>
            <td class="px-6 py-4 text-sm break-all text-indigo-700"><?= $user['email']; ?></td>
            <td class="px-6 py-4 text-sm flex gap-2">
              <a href="<?=site_url('students/update/'.$user['id']);?>"
                 class="px-4 py-2 bg-indigo-100 text-indigo-700 rounded-lg font-semibold border border-indigo-300 hover:bg-indigo-200 hover:text-indigo-900 transition">
                  Update
              </a>
              <a href="<?=site_url('students/delete/'.$user['id']);?>"
                 onclick="return confirm('Are you sure you want to delete this record?');"
                 class="px-4 py-2 bg-red-100 text-red-600 rounded-lg font-semibold border border-red-300 hover:bg-red-200 hover:text-red-800 transition">
                  Delete
              </a>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>

</body>
</html>
