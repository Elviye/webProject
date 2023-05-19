        var exercises = 
        [
            {
            name: 'Push-ups',
            description: 'Start in a plank position with your hands slightly wider than shoulder-width apart. Lower your body until your chest touches the floor, then push back up to the starting position.',
            muscle_groups: 'Chest, Shoulders, Triceps',
            difficulty: 'Beginner'
            },
            {
            name: 'Pull-ups',
            description: 'Hang from a pull-up bar with your palms facing away from you and your hands slightly wider than shoulder-width apart. Pull your body up until your chin is above the bar, then lower yourself back down to the starting position.',
            muscle_groups: 'Back, Biceps',
            difficulty: 'Intermediate'
            },
            {
            name: 'Squats',
            description: 'Stand with your feet shoulder-width apart. Lower your body as if you were sitting back into a chair, keeping your chest up and your knees behind your toes. Return to the starting position by pushing through your heels.',
            muscle_groups: 'Legs, Glutes',
            difficulty: 'Beginner'
            },
            {
            name: 'Shoulder Press',
            description: 'Stand with your feet shoulder-width apart and hold dumbbells at shoulder level with palms facing forward. Press the dumbbells overhead until your arms are fully extended, then lower them back to the starting position.',
            muscle_groups: 'Shoulders, Triceps',
            difficulty: 'Intermediate'
            },
            {
            name: 'Crunches',
            description: 'Lie on your back with your knees bent and your hands behind your head. Curl your upper body toward your knees, lifting your shoulder blades off the ground. Lower back down to the starting position.',
            muscle_groups: 'Abdominals',
            difficulty: 'Beginner'
            },
            {
            name: 'Hamstring Curls',
            description: 'Lie face down on a leg curl machine, with your heels hooked under the roller pads. Curl your legs up toward your glutes by flexing your knees, then slowly lower them back down to the starting position.',
            muscle_groups: 'Hamstrings',
            difficulty: 'Intermediate'
            },
            {
            name: 'Bicep Curls',
            description: 'Stand with your feet shoulder-width apart, holding dumbbells in your hands with palms facing forward. Bend your elbows and curl the dumbbells up toward your shoulders, then lower them back down to the starting position.',
            muscle_groups: 'Biceps',
            difficulty: 'Beginner'
            },
            {
            name: 'Tricep Dips',
            description: 'Sit on the edge of a bench or chair with your hands resting beside your hips. Slide your hips forward off the bench and lower your body by bending your elbows. Push yourself back up to the starting position by straightening your arms.',
            muscle_groups: 'Triceps',
            difficulty: 'Intermediate'
            },
            {
            name: 'Leg Press',
            description: 'Sit in a leg press machine with your feet shoulder-width apart on the footplate. Push against the footplate to extend your legs, then lower them back down to the starting position.',
            muscle_groups: 'Legs, Glutes',
            difficulty: 'Intermediate'
            },
            {
            name: 'Barbell Lunges',
            description: 'Stand with your feet hip-width apart, holding a barbell across your upper back. Take a step forward with one leg and lower your body until both knees are bent at a 90-degree angle. Push through your front heel to return to the starting position.',
            muscle_groups: 'Legs, Glutes',
            difficulty: 'Intermediate'
            },
            {
                name: 'Chest Press',
                description: 'Lie on a flat bench with a barbell or dumbbells in your hands. Extend your arms straight up, then lower the weight down towards your chest. Push it back up to the starting position.',
                muscle_groups: 'Chest, Triceps',
                difficulty: 'Intermediate'
            },
            {
                name: 'Deadlifts',
                description: 'Stand with your feet shoulder-width apart, holding a barbell in front of your thighs. Hinge at the hips and lower the barbell towards the ground, keeping your back straight. Drive through your heels to lift the barbell back up to the starting position.',
                muscle_groups: 'Back, Hamstrings, Glutes',
                difficulty: 'Advanced'
            },
            {
                name: 'Leg Extensions',
                description: 'Sit on a leg extension machine with your ankles hooked under the padded bar. Extend your legs, lifting the weighted bar towards the ceiling. Lower it back down to the starting position.',
                muscle_groups: 'Quadriceps',
                difficulty: 'Intermediate'
            },
            {
                name: 'Dumbbell Shoulder Raises',
                description: 'Stand with your feet shoulder-width apart, holding dumbbells in your hands with palms facing your body. Raise your arms out to the sides until they are parallel to the floor, then lower them back down to the starting position.',
                muscle_groups: 'Shoulders',
                difficulty: 'Intermediate'
            },
            {
                name: 'Plank',
                description: 'Start in a push-up position with your forearms on the ground. Engage your core and hold the position for the desired duration, keeping your body in a straight line.',
                muscle_groups: 'Core',
                difficulty: 'Intermediate'
            },
            {
                name: 'Hammer Curls',
                description: 'Stand with your feet shoulder-width apart, holding dumbbells in your hands with palms facing your body. Bend your elbows and curl the dumbbells up towards your shoulders, keeping your palms facing inward throughout the movement.',
                muscle_groups: 'Biceps, Forearms',
                difficulty: 'Intermediate'
            },
            {
                name: 'Tricep Pushdowns',
                description: 'Stand in front of a cable machine with a straight bar attached to the high pulley. Grab the bar with an overhand grip and push it down towards your thighs, extending your arms. Return to the starting position by bending your elbows.',
                muscle_groups: 'Triceps',
                difficulty: 'Intermediate'
            },
            {
                name: 'Leg Curls',
                description: 'Lie face down on a leg curl machine, with the roller pad against the back of your lower legs. Curl your legs up towards your glutes by flexing your knees, then slowly lower them back down to the starting position.',
                muscle_groups: 'Hamstrings',
                difficulty: 'Intermediate'
            },
            {
                name: 'Arnold Press',
                description: 'Sit on a bench with dumbbells in your hands, palms facing your body. Start with the dumbbells at shoulder height, then rotate your palms to face forward as you press the weights overhead. Reverse the motion to return to the starting position.',
                muscle_groups: 'Shoulders',
                difficulty: 'Intermediate'
            },
            {
                name: 'Hanging Leg Raises',
                description: 'Hang from a pull-up bar with your legs straight. Engage your core and raise your legs up towards your chest, then slowly lower them back down to the starting position.',
                muscle_groups: 'Abdominals, Hip Flexors',
                difficulty: 'Intermediate'
            },
            {
                name: 'Russian Twists',
                description: 'Sit on the floor with your knees bent and feet elevated off the ground. Lean back slightly and twist your torso from side to side, touching the floor on each side.',
                muscle_groups: 'Abdominals, Obliques',
                difficulty: 'Intermediate'
            },
            {
                name: 'Lunges',
                description: 'Stand with your feet hip-width apart. Take a step forward with one leg and lower your body until both knees are bent at a 90-degree angle. Push through your front heel to return to the starting position.',
                muscle_groups: 'Legs, Glutes',
                difficulty: 'Beginner'
            },
            {
                name: 'Lat Pulldowns',
                description: 'Sit at a lat pulldown machine and grasp the bar with a wide grip. Pull the bar down towards your chest, squeezing your shoulder blades together. Slowly release the bar back up to the starting position.',
                muscle_groups: 'Back, Biceps',
                difficulty: 'Intermediate'
            },
            {
                name: 'Incline Bench Press',
                description: 'Lie on an incline bench with a barbell or dumbbells in your hands. Extend your arms straight up, then lower the weight down towards your chest. Push it back up to the starting position.',
                muscle_groups: 'Chest, Shoulders, Triceps',
                difficulty: 'Intermediate'
            },
            {
                name: 'Standing Calf Raises',
                description: 'Stand with the balls of your feet on an elevated surface, such as a step or block. Rise up onto your toes, lifting your heels as high as possible. Lower your heels back down to the starting position.',
                muscle_groups: 'Calves',
                difficulty: 'Beginner'
            },
            {
                name: 'Bent-Over Rows',
                description: 'Stand with your feet shoulder-width apart, holding a barbell or dumbbells in front of you. Bend at the hips, keeping your back flat, and lower the weight towards the ground. Pull it back up towards your abdomen, squeezing your shoulder blades together.',
                muscle_groups: 'Back, Biceps',
                difficulty: 'Intermediate'
            },
            {
                name: 'Leg Press',
                description: 'Sit in a leg press machine with your feet shoulder-width apart on the footplate. Push against the footplate to extend your legs, then lower them back down to the starting position.',
                muscle_groups: 'Legs, Glutes',
                difficulty: 'Intermediate'
            },
            {
                name: 'Plank Shoulder Taps',
                description: 'Start in a high plank position with your hands shoulder-width apart. Lift one hand off the ground and touch your opposite shoulder, then return to the starting position. Alternate sides.',
                muscle_groups: 'Core, Shoulders',
                difficulty: 'Intermediate'
            },
            {
                name: 'Seated Dumbbell Shoulder Press',
                description: 'Sit on a bench with dumbbells in your hands, palms facing forward. Start with the dumbbells at shoulder height, then press them overhead until your arms are fully extended. Lower them back down to the starting position.',
                muscle_groups: 'Shoulders',
                difficulty: 'Intermediate'
            },
            {
                name: 'Side Plank',
                description: 'Lie on your side with your forearm on the ground and your feet stacked together. Lift your hips off the ground, creating a straight line from your head to your feet. Hold the position for the desired duration, then switch sides.',
                muscle_groups: 'Core, Obliques',
                difficulty: 'Intermediate'
            },
            {
                name: 'Dumbbell Lunges',
                description: 'Stand with your feet hip-width apart, holding dumbbells in your hands by your sides. Take a step forward with one leg and lower your body until both knees are bent at a 90-degree angle. Push through your front heel to return to the starting position. Repeat on the other leg.',
                muscle_groups: 'Legs, Glutes',
                difficulty: 'Intermediate'
            },
            {
                name: 'Renegade Rows',
                description: 'Start in a high plank position with a dumbbell in each hand. Row one dumbbell up towards your side while stabilizing your body with the other arm. Lower the dumbbell back down and repeat on the other side.',
                muscle_groups: 'Back, Core, Shoulders',
                difficulty: 'Intermediate'
            },
            {
                name: 'Romanian Deadlifts',
                description: 'Stand with your feet hip-width apart, holding a barbell or dumbbells in front of your thighs. Hinge at the hips and lower the weight towards the ground while keeping your back straight. Engage your hamstrings and glutes to return to the starting position.',
                muscle_groups: 'Hamstrings, Glutes',
                difficulty: 'Intermediate'
            },
            {
                name: 'Dips',
                description: 'Position yourself between parallel bars with your arms fully extended. Lower your body by bending your elbows until your upper arms are parallel to the ground. Push yourself back up to the starting position.',
                muscle_groups: 'Chest, Triceps, Shoulders',
                difficulty: 'Intermediate'
            },
            {
                name: 'Russian Twists',
                description: 'Sit on the floor with your knees bent and feet elevated off the ground. Lean back slightly and twist your torso from side to side, touching the floor on each side.',
                muscle_groups: 'Abdominals, Obliques',
                difficulty: 'Intermediate'
            },
            {
                name: 'Mountain Climbers',
                description: 'Start in a high plank position. Bring one knee towards your chest, then quickly switch legs, simulating a running motion. Keep your core engaged throughout the movement.',
                muscle_groups: 'Core, Shoulders',
                difficulty: 'Intermediate'
            },
            {
                name: 'Medicine Ball Slams',
                description: 'Hold a medicine ball with both hands, standing with your feet shoulder-width apart. Lift the ball overhead, then forcefully slam it down to the ground. Catch the ball on the bounce and repeat.',
                muscle_groups: 'Shoulders, Core',
                difficulty: 'Intermediate'
            },
            {
                name: 'Bulgarian Split Squats',
                description: 'Stand a few feet in front of a bench or step, facing away from it. Place the top of one foot on the bench and lunge forward, bending your front knee until it forms a 90-degree angle. Push through your front heel to return to the starting position. Repeat on the other leg.',
                muscle_groups: 'Legs, Glutes',
                difficulty: 'Intermediate'
            },
            {
                name: 'Single Arm Rows',
                description: 'Stand with your feet shoulder-width apart, holding a dumbbell in one hand. Hinge at the hips, keeping your back flat, and lower the weight towards the ground. Pull the weight up towards your abdomen, squeezing your shoulder blade. Lower the weight back down and repeat on the other side.',
                muscle_groups: 'Back, Biceps',
                difficulty: 'Intermediate'
            }

            ];

        // Function to generate a workout
    function getFilteredExercises(fitnessLevel, workoutType, genderPreference) {
        // Filter the exercises based on fitness level, workout type, and gender preference
        var filteredExercises = exercises.filter(function(exercise) {
            return exercise.difficulty === fitnessLevel &&
                exercise.muscle_groups.includes(workoutType) &&
                (exercise.gender === genderPreference || exercise.gender === 'Unisex');
        });

        return filteredExercises;
    }
            function generateWorkout(event) {
                event.preventDefault(); // Prevent form submission
            
                // Get user selections
                var fitnessLevel = document.getElementById('fitnessLevel').value;
                var workoutType = document.getElementById('workoutType').value;
            
                // Generate the workout
                var workout = getFilteredExercises(fitnessLevel, workoutType);
            
                // Display the workout
                var workoutOutput = document.getElementById('workoutOutput');
                workoutOutput.innerHTML = ''; // Clear previous output
            
                if (workout.length > 0) {
                for (var i = 0; i < workout.length; i++) {
                    var exercise = workout[i];
                    var exerciseElement = document.createElement('div');
                    exerciseElement.innerHTML =
                    '<h3>' +
                    exercise.name +
                    '</h3>' +
                    '<p>' +
                    exercise.description +
                    '</p>' +
                    '<p>Muscle Groups: ' +
                    exercise.muscle_groups +
                    '</p>' +
                    '<p>Difficulty: ' +
                    exercise.difficulty +
                    '</p>';
            
                    workoutOutput.appendChild(exerciseElement);
                }
                } else {
                workoutOutput.innerHTML = '<p>No exercises found matching the criteria.</p>';
                }
            }
            
            // Add event listener to the form submission
            var workoutForm = document.getElementById('workoutForm');
            workoutForm.addEventListener('submit', generateWorkout);
            